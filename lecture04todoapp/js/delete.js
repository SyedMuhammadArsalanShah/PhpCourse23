deletes = document.getElementsByClassName("deletes");




Array.from(deletes).forEach((element) => {
    element.addEventListener("click", (e) => {






        console.log("mubarak ho delete is  working.....");









        if (confirm("Do you want to delete....? ")) {


            sno = e.target.id.substr(1);
            console.log(sno)
            window.location = `/php%20course/lecture04todoapp/lecture04todoapp.php?deletevalue=${sno}`;
        } else {

            console.log("no is pressed")

        }



    })
});