/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 var _title;
    var _date;
    var _time;
    var _location;
    var _description;
    var _timestamp;
    var _type;
    
// Initialize Firebase
function setup() {
    var config = {
    apiKey: "AIzaSyDCB-XYhPG5_tps1ZPR4lMLs0p1X_uPGpQ",
    authDomain: "asap-c4472.firebaseapp.com",
    databaseURL: "https://asap-c4472.firebaseio.com/",
    storageBucket: "asap-c4472.appspot.com",
    messagingSenderId: "625916539957",
    };
    firebase.initializeApp(config);
};

function writeToFireb(type, title, date, time, location, description, timestamp){
   setup(); 
    var asapDb = firebase.database().ref.child('Event/');
    asapDb.set({
        _timestamp: {
            title: _title,
            date: _date,
            time: _time,
            location: _location,
            description: _description,
            postType: _type,
            timestamp: _timestamp
        }
    });
    
};

 // Get a reference to the database service
function writeUserData(type, title, date, time, location, description, timestamp) { 
    var data = {
    title: _title,
    date: _date,
    time: _time,
    location: _location,
    description: _description,
    postType: _type,
    timestamp: _timestamp
    };
     
    firebase.database().ref.child('Event').push(_timestamp).push(data);
};


// var toFirebaseLib = toFirebaseLib || (function(){
//    var _time = {}; // private
//
//    return {
//        init : function writeUserData(type, title, date, time, location, description, timestamp) {
////                var type = type;
////                var title = title;
////                var date = date;
////                var location = location;
////                var description = description;
////                var timestamp = timestamp;
//                
//            firebase.database().ref('Event/' + timestamp).set({
//              title: title,
//              date: date,
//              time: time,
//              location: location,
//              description: description,
//              postType: type,
//              timestamp: timestamp
//            });
//            
//            alert("you have reached writeUserData");
//          },
//        helloWorld : function() {
//            alert('Hello World! -' + _args[0]);
//        }
//    };
//}());

//
//var uploadToDB = function toFirebaseLib(type, title, date, time, location, description, timestamp){
//    var obj = {};
//    obj.title = title; 
//            function writeUserData(type, title, date, time, location, description, timestamp) {   
//            firebase.database().ref('Event/' + timestamp).set({
//              title: title,
//              date: date,
//              time: time,
//              location: location,
//              description: description,
//              postType: type,
//              timestamp: timestamp
//            });
//            
//            alert("you have reached writeUserData");
//          };
//};