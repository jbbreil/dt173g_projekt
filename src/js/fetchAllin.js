"use strict"

// VARIABLES 

//html output
let workEl = document.getElementById('work-output');
let courseEl = document.getElementById('course-output');
let adminWorkEl = document.getElementById('admin-work-output');
let adminCourseEl = document.getElementById('admin-course-output');

//form input
let dateInput = document.getElementById('date');
let companyInput = document.getElementById('company');
let titleInput = document.getElementById('title');


let nameInput =  document.getElementById("name");
let codeInput = document.getElementById('code');
let progressionInput =  document.getElementById("progression");
let syllabusInput = document.getElementById('syllabus');

// handelselyssnare
window.addEventListener("load", getAllinApi);
window.addEventListener("load", getAllinApiAdmin);

const addWorkBtn = document.querySelector('#addWork')
addWorkBtn.addEventListener('click',  () => {
console.log('add-work-btn')
addWork()
})

const addCourseBtn = document.querySelector('#addCourse')
addCourseBtn.addEventListener('click',  () => {
console.log('add-course-btn')
addCourse()
})

const editCourseBtn = document.querySelector('#editCourse')
editCourseBtn.addEventListener('click',  () => {
console.log('edit-course-btn')
editCourse()
})
const editWorkBtn = document.querySelector('#editWork')
editWorkBtn.addEventListener('click',  () => {
console.log('edit-work-btn')
editWork()
})


// GET MULTIPLE API

function getAllinApi() {
  Promise.all([
    fetch('http://localhost/dt173g_projekt/api/rest-course'),
    fetch('http://localhost/dt173g_projekt/api/rest-work')
  ]).then(function (responses) {
    // Get a JSON object from each of the responses
    return Promise.all(responses.map(function (response) {
      return response.json();
    }));
  }).then(function (data) {
    courseEl.innerHTML = '';
    workEl.innerHTML = '';
    data[0].forEach(course => { 
      courseEl.innerHTML += 
              '<tr>'+
              '<td>' +course.code+ '</td>'+
              '<td>'+course.name+ '</td>'+
              '<td>'+course.progression+'</td>'+
              '<td><a target="_blank" class="table-link" href='+course.syllabus+'>'+'Webblänk</a></td>'+
              '</tr>' 
            })

    data[1].forEach(work => { 
      workEl.innerHTML += 
            '<tr>'+
            '<td>' +work.date+ '</td>'+
            '<td>'+work.company+ '</td>'+
            '<td>'+work.title+'</td>'+
            '</tr>' 
          })
    // Log the data to the console
    // You would do something with both sets of data here
    console.log(data);
  }).catch(function (error) {
    // if there's an error, log it
    console.log(error);
  });

}

function getAllinApiAdmin() {
  Promise.all([
    fetch('http://localhost/dt173g_projekt/api/rest-course'),
    fetch('http://localhost/dt173g_projekt/api/rest-work')
  ]).then(function (responses) {
    // Get a JSON object from each of the responses
    return Promise.all(responses.map(function (response) {
      return response.json();
    }));
  }).then(function (data) {
    adminCourseEl.innerHTML = '';
    adminWorkEl.innerHTML = '';
    data[0].forEach(course => { 
      adminCourseEl.innerHTML += 
              '<tr>'+
              '<td>' +course.code+ '</td>'+
              '<td>'+course.name+ '</td>'+
              '<td>'+course.progression+'</td>'+
              '<td><a target="_blank" class="table-link" href='+course.syllabus+'>'+'Webblänk</a></td>'+
              "<td title='Radera'><button onclick='deleteCourse(\""+course.id+"\")'><i class='fa fa-trash'></i></button></td>"+
              "<td title='Redigera'><button onclick='editCoursePage(\""+course.id+"\")' id='edit-course-page' ><i class='fa fa-edit'></i></button></td>"+
              '</tr>' 
            })

    data[1].forEach(work => { 
      adminWorkEl.innerHTML += 
            '<tr>'+
            '<td>' +work.date+ '</td>'+
            '<td>'+work.company+ '</td>'+
            '<td>'+work.title+'</td>'+
            "<td title='Radera'><button onclick='deleteWork(\""+work.id+"\")'><i class='fa fa-trash'></i></button></td>"+
            "<td title='Redigera'><button onclick='editWorkPage(\""+work.id+"\")' id='edit-work-page'><i class='fa fa-edit'></i></button></td>"+
            '</tr>' 
          })
    // Log the data to the console
    // You would do something with both sets of data here
    console.log(data);
  }).catch(function (error) {
    // if there's an error, log it
    console.log(error);
  });

}

// Edit forwarding webadress 
function editCoursePage(id) {
  window.open(`edit-course.php?id=${id}`, "Admin edit courses page");
}
function editWorkPage(id) {
  window.open(`edit-work.php?id=${id}`, "Admin edit works page");
}


/** COURSE CRUD */

function deleteCourse(id){

  let url = "http://localhost/dt173g_projekt/api/rest-course?id=";
  fetch(url + id, {
      //url: "courses/delete/"+id, 
      method: "DELETE",
      dataType: "json",
      cookie: false
    
  })
  
  .then(response => response.json())
  .then(data => {
      console.log(data);
      //location.reload();
      //ladda om lista
      getAllinApi();
  })
.catch(error => {
  console.log('Error: ', error);
})

} 

// Lägga till kurs 

function addCourse() {

  // lagra i variabelt användarens input från formulär
  let code = codeInput.value;
  let name = nameInput.value;
  let progression = progressionInput.value;
  let syllabus = syllabusInput.value;

  // lagra de sammanlagda variablerna som ett objekt 
  let course = {'code':code, 'name':name, 'progression':progression, 'syllabus':syllabus}

    // göra om i json fromat och skicka i självsa anropet
  let url = "http://localhost/dt173g_projekt/api/rest-course";

  fetch(url, {
      method: "POST",
      headers: {
          'Content-Type': 'application/json',
        },
      body: JSON.stringify(course),
    
  })
  
  .then(response => response.json())
  .then(data => {
      console.log('Success:', data)
      location.reload();
      alert('Kursen blev lagd in i databasen!')
  })
.catch(error => {
  console.log('Error: ', error);
  });
  }
  

// update course

function editCourse(id){

  
 // lagra i variabelt användarens input från formulär
 let code = codeInput.value;
 let name = nameInput.value;
 let progression = progressionInput.value;
 let syllabus = syllabusInput.value;


 // lagra de sammanlagda variablerna som ett objekt 
 let course = {'code':code, 'name':name, 'progression':progression, 'syllabus':syllabus, id}

 // göra om i json fromat och skicka i självsa anropet

 let url = `http://localhost/dt173g_projekt/api/rest-course?id=${id}`;

 fetch(url, {
     method: "PUT",
     headers: {
         'Content-Type': 'application/json',
       },
     body: JSON.stringify(course),
   
 })
 
 .then(response => response.json())
 .then(data => {
     console.log('Success:', data)
     window.location.replace("http://localhost/dt173g_projekt/pub/admin.php#courses");
     alert('Kursen blev uppdaterd!')
 })
.catch(error => {
 console.log('Error: ', error);
});

} 



/** WORK CRUD */

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

// add work

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
       console.log('Success:', data)
       //alert('Jobbet blev lagd in i databasen!');
       location.reload();
        

   })
 .catch(error => {
   console.log('Error: ', error);
   //alert('Jobbet blev inte lagd in i databasen!');
   });
   }

// uppdatera kurn

function editWork(id) {

  let date = dateInput.value;
  let company = companyInput.value;
  let title = titleInput.value;


   // lagra de sammanlagda variablerna som ett objekt 
 let work = {'date':date, 'company':company, 'title':title, id}

let url = `http://localhost/dt173g_projekt/api/rest-work?id=${id}`;

 fetch(url, {
     method: "PUT",
     headers: {
         'Content-Type': 'application/json',
       },
     body: JSON.stringify(work),
   
 })
 
 .then(response => response.json())
 .then(data => {
     console.log('Success:', data)
     window.location.replace("http://localhost/dt173g_projekt/pub/admin.php");
     alert('Jobbet blev uppdaterd!')
 })
.catch(error => {
 console.log('Error: ', error);
});

} 