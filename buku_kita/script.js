//selecting all required elements
//const dropArea = document.querySelector(".drag-area"),
//dragText = dropArea.querySelector("header"),
//button = dropArea.querySelector("button"),
//input = dropArea.querySelector("input");
//let file; //ini adalah variabel global dan kita akan menggunakannya di dalam multiple function

/*button.onclick = ()=>{
    input.click(); //jika user me klik pada button maka si input akan ke klik juga
}*/

//input.addEventListener("change", function(){
    //getting user select file and [0] ini berarti jika user memilih multiple file maka kita hanya akan memilih yang pertama saja
    //file = this.files[0];
    //showFile(); //memanggil function showFile();
    //dropArea.classList.add("active");
//});



//jika pengguna mau menaruh gambar di DropArea
//dropArea.addEventListener("dragover", (event)=>{
    //event.preventDefault(); //preventing dari default behaviour
    //dropArea.classList.add("active");
    //dragText.textContent ="Lepas Gambar untuk Mengunggah";
//});

//jika pengguna tidak jadi menaruh gambar di DropArea
//dropArea.addEventListener("dragleave", ()=>{
    //dropArea.classList.remove("active");
    //dragText.textContent ="Seret Gambar untuk Mengunggah";
//});

//jika pengguna menaruh gambar di DropArea
//dropArea.addEventListener("drop", (event)=>{
    //event.preventDefault(); //preventing dari default behaviour
    //getting user select file and [0] ini berarti jika user memilih multiple file maka kita hanya akan memilih yang pertama saja
    //file = event.dataTransfer.files[0];
    //showFile(); //memanggil function showFile();
//});

//function showFile(){
    //let fileType = file.type;
    //let validExtensions = ["image/png", "image/jpeg", "image/jpg"]; //menambahkan bebrapa valid image extensions di dalam array
    //if(validExtensions.includes(fileType)){ //jika file yang dipilih user adalaha file gambar
        //let fileReader = new FileReader(); //membuat objek reader baru
        //fileReader.onload = ()=>{
            //let fileURL = fileReader.result; //meneruskan sumber file pengguna dalam variabel url file
            //let imgTag = `<img src="${fileURL}" alt="">`; //membuat tag img dan passing user selected file source inside src attribute
            //dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
        //}
        //fileReader.readAsDataURL(file);
    //}else{
        //alert("Ini Bukan File Gambar!");
        //dropArea.classList.remove("active");
        //dragText.textContent ="Seret Gambar untuk Mengunggah";
    //}
//}