"use strict"

// variabler 

let url = "http://localhost/dt173g_projekt/api/rest-work";

let adminWorkEl = document.getElementById('admin-works-output');
let workEl = document.getElementById('works-output');

let addWorkbtn = document.getElementById('addWork');
let editWorkbtn = document.getElementById('editWork');
let dateInput = document.getElementById('date');
let companyInput = document.getElementById('company');
let titleInput = document.getElementById('title');

// handelselyssnare

window.addEventListener('load', function() {
    getAdminWork();
  });
  
  window.addEventListener('load', function() {
    getWork();
  });
  
  addWorkbtn.addEventListener('click', function() {
    addWork();
  });

function getWork() {
    workEl.innerHTML = '';

    fetch(url)

    .then(response => response.json())   

    .then(data => { 
        data.forEach(work => {
            workEl.innerHTML += 
            '<tr>'+
            '<td>' +work.date+ '</td>'+
            '<td>'+work.company+ '</td>'+
            '<td>'+work.title+'</td>'+
            '</tr>' 
        })
    })

}

function getAdminWork() {
    adminWorkEl.innerHTML = '';

    fetch(url)

    .then(response => response.json())   

    .then(data => { 
        data.forEach(work => {
            adminWorkEl.innerHTML += 
            '<tr>'+
            '<td>' +work.date+ '</td>'+
            '<td>'+work.company+ '</td>'+
            '<td>'+work.title+'</td>'+
            "<td title='Radera'><button onclick='deleteWork(\""+work.id+"\")'><i class='fa fa-trash'></i></button></td>"+
            "<td title='Redigera'><button onclick='editWork(this, \""+work.id+"\")' id='editWork'><i class='fa fa-edit'></i></button></td>"+
            '</tr>' 
        })
    })

}

function deleteWork(id){

    let url = "http://localhost/dt173g_projekt/api/rest-work?id=";
    fetch(url + id, {
        //url: "courses/delete/"+id, 
        method: "DELETE",
        dataType: "json",
        cookie: false
      
    })
    
    .then(response => response.json())
    .then(data => {
        console.log(data);
        location.reload();
        //ladda om lista
        //loadCourses();
    })
.catch(error => {
    console.log('Error: ', error);
})

} 

// uppdatera kurn

function editWork(val, id){

    let url = "http://localhost/dt173g_projekt/api/rest-work?id=";

    const formData = new FormData();
    
    formData.append('data', val.data);
    formData.append('company', val.company);
    formData.append('title', val.title);
    
    fetch(url, + id, {
      method: 'PUT',
      body: formData
    })
    .then(response => response.json())
    .then(result => {
      console.log('Success:', result);
    })
    .catch(error => {
      console.error('Error:', error);
    });

} 

// Lägga till jobb 

function addWork() {

    // lagra i variabelt användarens input från formulär
    let date = dateInput.value;
    let company = companyInput.value;
    let title = titleInput.value;

    // lagra de sammanlagda variablerna som ett objekt 
    let work = {'date':date, 'company':company, 'title':title}

    // göra om i json fromat och skicka i självsa anropet

    let url = "http://localhost/dt173g_projekt/api/rest-work";

    fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
          },
        body: JSON.stringify(work),
      
    })
    
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        getWork();
        //ladda om lista
        //loadCourses();
    })
.catch(error => {
    console.log('Error: ', error);
})

} 
