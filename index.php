
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
function showUser() {
  var nim = document.getElementById("nim").value
  var kode_bk = document.getElementById("kode_bk").value
  // console.log(nim + kode_bk)
  if (nim=="" || kode_bk=="") {
    document.getElementById("txtHint").innerHTML="Masukkan Nim dan Kodebuku yang sesuai";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getData.php?nim="+nim+"&"+"kode_bk="+kode_bk,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b64fc8">
        <a class="navbar-brand" href="#">Selamat Datang di Perpustakaan</a>
    </nav>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body" style="background-color: #ea80fc"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIM</label>
                        <input type="text" class="form-control" id="nim" aria-describedby="emailHelp" placeholder="Nim">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kode buku</label>
                        <input type="text" class="form-control" id="kode_bk" placeholder="Kode Buku">
                    </div>
                    <button onclick="showUser()" type="submit" class="btn btn-primary">Submit</button>
        
            </div>
        </div>
<form>

</form>
<br>
<div id="txtHint"><b>Data perpus...</b></div>
</body>
</html>
