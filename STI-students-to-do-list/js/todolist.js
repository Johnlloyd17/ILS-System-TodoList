
    todoMain();
    function EditMe(x){
      let theData = $(x).attr('data-id');
      notifClose.click();
      $('[data-id='+theData+']').eq(8).click();
    }
    function DeleteMe(x){
      let theData = $(x).attr('data-id');
      $('[data-id='+theData+']').eq(9).click();
      localStorage.setItem('Notification', '[]');
    }
    $('#changeBtn').on('click',function(){
      localStorage.setItem('Notification', '[]');
    });
    function todoMain() {
      const DEFAULT_OPTION = "Choose category";

      let inputElem,
          inputElem2,
          dateInput,
          timeInput,
          addButton,
          sortButton,
          selectElem,
          todoList = [],
          calendar,
          shortlistBtn,
          changeBtn,
          todoTable,
          draggingElement,
          currentPage = 1,
          itemsPerPage = Number.parseInt(localStorage.getItem("todo-itemsPerPage")) || 5,
          totalPages = 0,
          itemsPerPageSelectElem,
          paginationCtnr,
          todoModalCloseBtn;

      getElements();
      addListeners();
      initCalendar();
      load();
      renderRows(todoList);
      updateSelectOptions();


      updateHistory();
      setInterval(updateHistory, 100);
      function updateHistory(){
        let data_retrieved = JSON.parse(localStorage.getItem('todoList'));
        let currentDate = new Date();
        let dateNow = currentDate.getTime();
        let dataResult = '';
        for(let a = 0; a < data_retrieved.length; a++){
          let oldDate = Date.parse(data_retrieved[a]['date']);
          if(dateNow >= oldDate){

            dataResult += '<tr><td>'+data_retrieved[a]['todo']+'</td><td>'+data_retrieved[a]['category']+'</td><td>'+data_retrieved[a]['date']+'</td><td>'+data_retrieved[a]['time']+'</td></tr>';
          }
        }

        $('#historyToDo').html(dataResult);
      }

      var canNotify = false;
      updateNotification();

      setInterval(updateNotification, 1000);
      
      function updateNotification(){
        let data_retrieved = JSON.parse(localStorage.getItem('todoList'));

        let currentDate = new Date();

        let tmp_month = twoDigit(currentDate.getMonth()+1);
        let tmp_day = twoDigit(currentDate.getDate());
        let tmp_year = currentDate.getFullYear();
        let compiled_date = tmp_year+"-"+tmp_month+"-"+tmp_day;
        
        let tmp_hour = twoDigit(currentDate.getHours());
        let tmp_minute = twoDigit(currentDate.getMinutes());
        let compiled_time = tmp_hour+":"+tmp_minute;
        
        for(let a = 0; a < data_retrieved.length; a++){
          let sched_date = data_retrieved[a]['date'];
          let sched_time = data_retrieved[a]['time'];
          let todo_id = data_retrieved[a]['id'];

          let data_parsed = data_retrieved[a];
          
          if(sched_date == compiled_date){
            if(localStorage.getItem('Notification') == null || localStorage.getItem('Notification') == ''){
              let notif_store = [data_parsed];
              localStorage.setItem('Notification', JSON.stringify(notif_store));
            }else{
              let retrieve_notif = JSON.parse(localStorage.getItem('Notification'));
              let have_same = false;
              for(let b = 0; b < retrieve_notif.length; b++){
                if(retrieve_notif[b]['id'] == data_parsed['id']){
                  have_same = true;
                  break;
                }
              }
              if(!have_same){
                retrieve_notif[retrieve_notif.length] = data_parsed;
                localStorage.setItem('Notification', JSON.stringify(retrieve_notif));
              }
            }
          }else{
            if(localStorage.getItem('Notification') != null){
              let retrieve_notif = JSON.parse(localStorage.getItem('Notification'));
              let have_same = false;
              let same_order = 0;
              for(let b = 0; b < retrieve_notif.length; b++){
                if(retrieve_notif[b]['id'] == data_parsed['id']){
                  have_same = true;
                  same_order = b;
                  
                  break;
                }
              }
              if(have_same){
                retrieve_notif.splice(same_order, 1);
                localStorage.setItem('Notification', JSON.stringify(retrieve_notif));
              }

            }// end if
            
            
          } //End else
        } // End loop
        let retrieve_notif = JSON.parse(localStorage.getItem('Notification'));
        if(retrieve_notif.length > 0){
          $('#todayNotify').html('');
          for(let a = 0; a < retrieve_notif.length; a++){
            let reverse_num = a;
            let count_notify = a+1;
            let notify_tr = "<tr style='background: #f2f2f2;'></tr>";
            let notify_block = "<td style='border: none;'>"+count_notify+"</td><td style='border: none;'>"+retrieve_notif[reverse_num]['todo']+"</td><td style='border: none;'>"+retrieve_notif[reverse_num]['category']+"</td><td style='border: none;'>"+retrieve_notif[reverse_num]['date']+"</td><td style='border: none;'>"+retrieve_notif[reverse_num]['time']+"</td><td style='border: none;'><button style='padding: 0px 5px;margin-right: 5px;' data-id='"+retrieve_notif[reverse_num]['id']+"' onclick='EditMe(this)'>Edit</button><button style='padding: 0px 5px;' data-id='"+retrieve_notif[reverse_num]['id']+"' onclick='DeleteMe(this)'>Delete</button></td>";
            $('#todayNotify').append(notify_tr);
            $('#todayNotify').children().eq(a).append(notify_block);
          }
          canNotify = true;
        }else{
          $('#todayNotify').html('');
        }
      }
      if(canNotify){
        theNotif.click();
      }

      function twoDigit(digit){
        if(digit.toString().length == 1){
          digit = "0"+digit;
          return digit;
        }else{
          return digit;
        }

      }

      function getElements() {
        inputElem = document.getElementById("todo-add-todo");
        inputElem2 = document.getElementById("todo-add-category");
        dateInput = document.getElementById("dateInput");
        timeInput = document.getElementById("timeInput");
        addButton = document.getElementById("addBtn");
        sortButton = document.getElementById("sortBtn");
        selectElem = document.getElementById("categoryFilter");
        shortlistBtn = document.getElementById("shortlistBtn");
        changeBtn = document.getElementById("changeBtn");
        todoTable = document.getElementById("todoTable");
        itemsPerPageSelectElem = document.getElementById("itemsPerPageSelectElem");
        paginationCtnr = document.querySelector(".pagination-pages");
        todoModalCloseBtn = document.getElementById("todo-modal-close-btn");
      }

      function addListeners() {
        addButton.addEventListener("click", addEntry, false);
        sortButton.addEventListener("click", sortEntry, false);
        selectElem.addEventListener("change", multipleFilter, false);
        shortlistBtn.addEventListener("change", multipleFilter, false);

        todoModalCloseBtn.addEventListener("click", closeEditModalBox, false);

        changeBtn.addEventListener("click", commitEdit, false);

        todoTable.addEventListener("dragstart", onDragstart, false);
        todoTable.addEventListener("drop", onDrop, false);
        todoTable.addEventListener("dragover", onDragover, false);

        paginationCtnr.addEventListener("click", onPaginationBtnsClick, false);

        itemsPerPageSelectElem.addEventListener("change", selectItemsPerPage, false);

              }

      function addEntry(event) {

        if(inputElem.value != '' && inputElem2.value != '' && dateInput.value != '' && timeInput.value != ''){
          let inputValue = inputElem.value;
          inputElem.value = "";

          let inputValue2 = inputElem2.value;
          inputElem2.value = "";

          let dateValue = dateInput.value;
          dateInput.value = "";

          let timeValue = timeInput.value;
          timeInput.value = "";


          let obj = {
            id: _uuid(),
            todo: inputValue,
            category: inputValue2,
            date: dateValue,
            time: timeValue,
            done: false,


          };


          renderRow(obj);

          todoList.push(obj);

          save();

          updateSelectOptions();

          addEvent(obj);

          updateNotification();

        }else{
          timeInput.reportValidity();
          dateInput.reportValidity();
          inputElem2.reportValidity();
          inputElem.reportValidity();
        }
        
      }

      function updateSelectOptions() {
        let options = [];

        todoList.forEach((obj) => {
          options.push(obj.category);
        });

        let optionsSet = new Set(options);

        // empty the select options
        selectElem.innerHTML = "";

        let newOptionElem = document.createElement('option');
        newOptionElem.value = DEFAULT_OPTION;
        newOptionElem.innerText = DEFAULT_OPTION;
        selectElem.appendChild(newOptionElem);

        for (let option of optionsSet) {
          let newOptionElem = document.createElement('option');
          newOptionElem.value = option;
          newOptionElem.innerText = option;
          selectElem.appendChild(newOptionElem);
        }


      }

      function save() {
        let stringified = JSON.stringify(todoList);
        localStorage.setItem("todoList", stringified);
      }

      function load() {
        let retrieved = localStorage.getItem("todoList");
        todoList = JSON.parse(retrieved);
        //console.log(typeof todoList)
        if (todoList == null)
          todoList = [];

        itemsPerPageSelectElem.value = itemsPerPage;
      }

      function renderRows(arr) {

        renderPageNumbers(arr);
        currentPage = currentPage > totalPages ? totalPages : currentPage;

        arr.forEach(addEvent);

        let slicedArr = arr.slice(itemsPerPage * (currentPage - 1), itemsPerPage * currentPage);
        slicedArr.forEach(todoObj => {
          renderRow(todoObj);
        })
      }

      function renderRow({ todo: inputValue, category: inputValue2, id, date, time, done }) {
        // add a new row

        let trElem = document.createElement("tr");
        todoTable.appendChild(trElem);
        trElem.draggable = "true";
        trElem.dataset.id = id;

        // checkbox cell
        let checkboxElem = document.createElement("input");
        checkboxElem.type = "checkbox";
        checkboxElem.addEventListener("click", checkboxClickCallback, false);
        checkboxElem.dataset.id = id;
        let tdElem1 = document.createElement("td");
        tdElem1.appendChild(checkboxElem);
        trElem.appendChild(tdElem1);

        // date cell
        let dateElem = document.createElement("td");
        dateElem.innerText = date; //formatDate(date);
        trElem.appendChild(dateElem);

        // time cell
        let timeElem = document.createElement("td");
        timeElem.innerText = time;
        trElem.appendChild(timeElem);

        // to-do cell
        let tdElem2 = document.createElement("td");
        tdElem2.innerText = inputValue;
        trElem.appendChild(tdElem2);


        // category cell
        let tdElem3 = document.createElement("td");
        tdElem3.innerText = inputValue2;
        tdElem3.className = "categoryCell";
        trElem.appendChild(tdElem3);




        // edit cell
        let editSpan = document.createElement("span");
        editSpan.innerText = "edit";
        editSpan.className = "material-icons";
        editSpan.addEventListener("click", toEditItem, false);
        editSpan.dataset.id = id;
        let editTd = document.createElement("td");
        editTd.appendChild(editSpan);
        trElem.appendChild(editTd);


        // delete cell
        let spanElem = document.createElement("span");
        spanElem.innerText = "delete";
        spanElem.className = "material-icons";
        spanElem.addEventListener("click", deleteItem, false);
        spanElem.dataset.id = id;
        let tdElem4 = document.createElement("td");
        tdElem4.appendChild(spanElem);
        trElem.appendChild(tdElem4);


        // done button
        checkboxElem.type = "checkbox";
        checkboxElem.checked = done;
        if (done) {
          trElem.classList.add("strike");
        } else {
          trElem.classList.remove("strike");
        }

        dateElem.dataset.type = "date";
        //dateElem.dataset.value = date;
        timeElem.dataset.type = "time";
        tdElem2.dataset.type = "todo";
        tdElem3.dataset.type = "category";

        dateElem.dataset.id = id;
        timeElem.dataset.id = id;
        tdElem2.dataset.id = id;
        tdElem3.dataset.id = id;

        function deleteItem() {
          trElem.remove();
          updateSelectOptions();

          for (let i = 0; i < todoList.length; i++) {
            if (todoList[i].id == this.dataset.id)
              todoList.splice(i, 1);
          }
          save();

          // remove from calendar
          let calendarEvent = calendar.getEventById(this.dataset.id);
          if(calendarEvent !== null)
            calendarEvent.remove();
        }

        function checkboxClickCallback() {
          trElem.classList.toggle("strike");
          for (let i = 0; i < todoList.length; i++) {
            if (todoList[i].id == this.dataset.id)
              todoList[i]["done"] = this.checked;
          }
          save();
          multipleFilter();
        }

      }

      function _uuid() {
        var d = Date.now();
        if (typeof performance !== 'undefined' && typeof performance.now === 'function') {
          d += performance.now(); //use high-precision timer if available
        }
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
          var r = (d + Math.random() * 16) % 16 | 0;
          d = Math.floor(d / 16);
          return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
        });
      }

      function sortEntry() {
        todoList.sort((a, b) => {
          let aDate = Date.parse(a.date);
          let bDate = Date.parse(b.date);
          return aDate - bDate;
        });

        save();

        clearTable();

        renderRows(todoList);
      }

      function initCalendar() {
        var calendarEl = document.getElementById('calendar');

        calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          initialDate: new Date(), //'2020-07-07',
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          events: [],
          eventClick: function (info) {
            toEditItem(info.event);
          },
          eventBackgroundColor: "#a11e12",
          eventBorderColor: "#ed6a5e",
          editable: true,
          eventDrop: function (info) {
            calendarEventDragged(info.event);
          },
          eventTimeFormat: {
            hour: 'numeric',
            minute: '2-digit',
            omitZeroMinute: false,
            hour12: false
          }
        });

        calendar.render();
      }


      function addEvent({id, todo, date, time, done}) {
        calendar.addEvent({
          id: id,
          title: todo,
          start: time === "" ? date : `${date}T${time}`,
          backgroundColor : (done ? "green" : "#a11e12"),
        });
      }

      function clearTable() {
        // Empty the table, keeping the first row
        let trElems = todoTable.getElementsByTagName("tr");
        for (let i = trElems.length - 1; i > 0; i--) {
          trElems[i].remove();
        }

        calendar.getEvents().forEach(event => event.remove());
      }

      function multipleFilter() {
        clearTable();

        let selection = selectElem.value;

        if (selection == DEFAULT_OPTION) {

          if (shortlistBtn.checked) {
            let resultArray = [];

            let filteredIncompleteArray = todoList.filter(obj => obj.done == false);
            //renderRows(filteredIncompleteArray);

            let filteredDoneArray = todoList.filter(obj => obj.done == true);
            //renderRows(filteredDoneArray);

            resultArray = [...filteredIncompleteArray, ...filteredDoneArray];
            renderRows(resultArray);
          } else {
            renderRows(todoList);
          }

        } else {

          let filteredCategoryArray = todoList.filter(obj => obj.category == selection);

          if (shortlistBtn.checked) {
            let resultArray = [];

            let filteredIncompleteArray = filteredCategoryArray.filter(obj => obj.done == false);
            //renderRows(filteredIncompleteArray);

            let filteredDoneArray = filteredCategoryArray.filter(obj => obj.done == true);
            //renderRows(filteredDoneArray);

            resultArray = [...filteredIncompleteArray, ...filteredDoneArray];
            renderRows(resultArray);
          } else {
            renderRows(filteredCategoryArray);
          }

        }




      }



      function onTableClicked(event) {
        if (event.target.matches("td") && event.target.dataset.editable == "true") {
          let tempInputElem;
          switch (event.target.dataset.type) {
            case "date":
              tempInputElem = document.createElement("input");
              tempInputElem.type = "date";
              tempInputElem.value = event.target.dataset.value;
              break;
            case "time":
              tempInputElem = document.createElement("input");
              tempInputElem.type = "time";
              tempInputElem.value = event.target.innerText;
              break;
            case "todo":
            case "category":
              tempInputElem = document.createElement("input");
              tempInputElem.value = event.target.innerText;

              break;
            default:
                                           }
          event.target.innerText = "";
          event.target.appendChild(tempInputElem);

          tempInputElem.addEventListener("change", onChange, false);


        }

        function onChange(event) {
          let changedValue = event.target.value;
          let id = event.target.parentNode.dataset.id;
          let type = event.target.parentNode.dataset.type;

          // remove from calendar
          calendar.getEventById(id).remove();

          todoList.forEach(todoObj => {
            if (todoObj.id == id) {
              //todoObj.todo = changedValue;
              todoObj[type] = changedValue;

              addEvent({
                id: id,
                title: todoObj.todo,
                start: todoObj.date,
              });
            }
          });
          save();

          if (type == "date") {
            event.target.parentNode.innerText = formatDate(changedValue);
          } else {
            event.target.parentNode.innerText = changedValue;
          }

        }
      }

      function formatDate(date) {
        let dateObj = new Date(date);
        console.log(dateObj);
        let formattedDate = dateObj.toLocaleString("en-GB", {
          month: "long",
          day: "numeric",
          year: "numeric",
        });
        return formattedDate;
      }

      function showEditModalBox(event) {
        document.getElementById("todo-overlay").classList.add("slidedIntoView");
      }

      function closeEditModalBox(event) {
        document.getElementById("todo-overlay").classList.remove("slidedIntoView");
      }

      function commitEdit(event) {
        closeEditModalBox();

        let id = event.target.dataset.id;
        let todo = document.getElementById("todo-edit-todo").value;
        let category = document.getElementById("todo-edit-category").value;
        let date = document.getElementById("todo-edit-date").value;
        let time = document.getElementById("todo-edit-time").value;

        // remove from calendar
        calendar.getEventById(id).remove();

        for (let i = 0; i < todoList.length; i++) {
          if (todoList[i].id == id) {
            todoList[i] = {
              id: id,
              todo: todo,
              category: category,
              date: date,
              time: time,
              done: false,
            };

            addEvent(todoList[i]);
          }
        }

        save();

        // Update the table
        //let tdNodeList = todoTable.querySelectorAll("td");
        //let tdNodeList = todoTable.querySelectorAll("td[data-id='" + id + "']");
        let tdNodeList = todoTable.querySelectorAll(`td[data-id='${id}']`);
        for (let i = 0; i < tdNodeList.length; i++) {
          //if(tdNodeList[i].dataset.id == id){
          let type = tdNodeList[i].dataset.type;
          switch (type) {
            case "date":
              tdNodeList[i].innerText = formatDate(date);
              break;
            case "time":
              tdNodeList[i].innerText = time;
              break;
            case "todo":
              tdNodeList[i].innerText = todo;
              break;
            case "category":
              tdNodeList[i].innerText = category;
              break;
                      }
          //}
        }
      }

      function toEditItem(event) {
        showEditModalBox();

        let id;

        if (event.target) // mouse event
          id = event.target.dataset.id;
        else // calendar event
          id = event.id;

        preFillEditForm(id);
      }

      function preFillEditForm(id) {
        let result = todoList.find(todoObj => todoObj.id == id);
        let { todo, category, date, time } = result;

        document.getElementById("todo-edit-todo").value = todo;
        document.getElementById("todo-edit-category").value = category;
        document.getElementById("todo-edit-date").value = date;
        document.getElementById("todo-edit-time").value = time;

        changeBtn.dataset.id = id;
      }

      function onDragstart(event) {
        draggingElement = event.target; //trElem
      }

      function onDrop(event) {

        /* Handling visual drag and drop of the rows */

        // prevent when target is table
        if (event.target.matches("table"))
        return;

        let beforeTarget = event.target;

        // to look through parent until it is tr
        while (!beforeTarget.matches("tr"))
          beforeTarget = beforeTarget.parentNode;

        // to be implemented
        //beforeTarget.style.paddingTop = "1rem";

        // prevent when the tr is the first row
        if (beforeTarget.matches(":first-child"))
          return;

        // visualise the drag and drop 
        todoTable.insertBefore(draggingElement, beforeTarget);


        /* Handling the array */

        let tempIndex;

        // find the index of one to be taken out
        todoList.forEach((todoObj, index) => {
          if (todoObj.id == draggingElement.dataset.id)
            tempIndex = index;
        });

        // pop the element
        let [toInsertObj] = todoList.splice(tempIndex, 1);

        // find the index of one to be inserted before

        todoList.forEach((todoObj, index) => {
          if (todoObj.id == beforeTarget.dataset.id)
            tempIndex = index;
        });

        // insert the temp
        todoList.splice(tempIndex, 0, toInsertObj);

        // update storage
        save();

      }

      function onDragover(event) {
        event.preventDefault();
      }

      function calendarEventDragged(event) {
        let id = event.id;
        //console.log(`event.start : ${event.start}`);
        let dateObj = new Date(event.start);
        //console.log(`dateObj : ${dateObj}`);
        let year = dateObj.getFullYear();
        let month = dateObj.getMonth() + 1;
        let date = dateObj.getDate();
        let hour = dateObj.getHours();
        let minute = dateObj.getMinutes();
        //console.log(`time: ${hour}:${minute}`);

        let paddedMonth = month.toString();
        if (paddedMonth.length < 2) {
          paddedMonth = "0" + paddedMonth;
        }

        let paddedDate = date.toString();
        if (paddedDate.length < 2) {
          paddedDate = "0" + paddedDate;
        }

        let toStoreDate = `${year}-${paddedMonth}-${paddedDate}`;
        //console.log(toStoreDate);

        todoList.forEach(todoObj => {
          if (todoObj.id == id) {
            todoObj.date = toStoreDate;
            if(hour !== 0)
              todoObj.time = `${hour.toString().padStart(2, "0")}:${minute.toString().padStart(2, "0")}`;
          }
        });

        save();

        multipleFilter();

      }

      function onPaginationBtnsClick(event){
        switch(event.target.dataset.pagination){
          case "pageNumber" :
            currentPage = Number(event.target.innerText);
            break;
          case "previousPage" :
            currentPage = currentPage == 1 ? currentPage : currentPage - 1;
            break;
          case "nextPage" :
            currentPage = currentPage == totalPages ? currentPage : currentPage + 1;
            break;
          case "firstPage" :
            currentPage = 1;
            break;
          case "lastPage" :
            currentPage = totalPages;
            break;
          default:
                                              }
        multipleFilter();
      }

      function renderPageNumbers(arr){
        let numberOfItems = arr.length;
        totalPages = Math.ceil(numberOfItems / itemsPerPage);

        let pageNumberDiv = document.querySelector(".pagination-pages");

        pageNumberDiv.innerHTML = `<span class="material-icons chevron" data-pagination="firstPage">first_page</span>`;

        if(currentPage != 1)
          pageNumberDiv.innerHTML += `<span class="material-icons chevron" data-pagination="previousPage">chevron_left</span>`;

        if(totalPages > 0){
          for(let i = 1; i <= totalPages; i++) {
            pageNumberDiv.innerHTML += `<span data-pagination="pageNumber">${i}</span>`;
          }
        }

        if(currentPage != totalPages)
          pageNumberDiv.innerHTML += `<span class="material-icons chevron" data-pagination="nextPage">chevron_right</span>`;

        pageNumberDiv.innerHTML += `<span class="material-icons chevron" data-pagination="lastPage">last_page</span>`;
      }

      function selectItemsPerPage(event){
        itemsPerPage = Number(event.target.value);
        localStorage.setItem("todo-itemsPerPage", itemsPerPage);
        multipleFilter();

      }

      
    }


