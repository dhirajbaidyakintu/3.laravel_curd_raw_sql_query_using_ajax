//For insert data
function SendData(){
    var NameID= document.getElementById('NameID').value;
    var ClassID= document.getElementById('ClassID').value;
    var RollID= document.getElementById('RollID').value;
    var AgeID= document.getElementById('AgeID').value;
    var EmailID= document.getElementById("EmailID").value;

    var url="/insertData";
    var data={name:NameID, class:ClassID, roll:RollID, age:AgeID, email:EmailID};

    axios.post(url, data)
        .then(function (response){
            alert(response.data);
        })
        .catch(function (error) {
           alert("Error");
        });
}




//For delete data
function DeleteData(){
    var ID= document.getElementById('ID').value;

    var url="/deleteData";
    var data={id:ID};

    axios.post(url, data)
        .then(function (response){
            alert(response.data);
        })
        .catch(function (error) {
            alert("Error");
        });
}




//For update data
function UpdateData(){
    var NameID= document.getElementById('NameID').value;
    var ClassID= document.getElementById('ClassID').value;
    var RollID= document.getElementById('RollID').value;
    var AgeID= document.getElementById('AgeID').value;
    var EmailID= document.getElementById("EmailID").value;
    var myID= document.getElementById('myID').value;

    var url="/updateData";
    var data={name:NameID, class:ClassID, roll:RollID, age:AgeID, email:EmailID, id:myID};

    axios.post(url, data)
        .then(function (response){
            alert(response.data);
        })
        .catch(function (error) {
            alert("Error");
        });
}
