<form id="form_mahasiswa">
<label for="prodi">
Prodi
</label>
<select name="prodi" id="prodi">
    <option value="" disabled="" selected=""> Pilih Program Studi </option>
    <option value="IF"> Teknik Informatika </option>
    <option value="EL"> Teknik Elektro </option>
    <option value="TI"> Teknik Industri </option>
    <option value="RK"> Rekayasa Kehutanan </option>
</select>
</form>
<br>
<div id="tampil_data"><table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
crossorigin = "anonymous">
</script>
<script>
$(document).ready(function(){
    $("#prodi").change(function(){
        var value=$(this).val();
    $.ajax({
        url:"tampil.php",
        type:"POST",
        data:"request=" + value,
        success:function(data){
            $("#tampil_data").html(data);
        }
    }) 
});
});
</script>