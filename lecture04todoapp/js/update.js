edits = document.getElementsByClassName("edits");




Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {





        tr = e.target.parentNode.parentNode;


        title = tr.getElementsByTagName("td")[1].innerText;
        desc = tr.getElementsByTagName("td")[2].innerText;



        titleEdit.value = title;
        descEdit.value = desc;


        editidd.value = e.target.id;


        console.log("mubarak ho edit", tr)
        console.log(title, desc)
        console.log("id =>", e.target.id)

        $('#editModal').modal('toggle');


    })
});