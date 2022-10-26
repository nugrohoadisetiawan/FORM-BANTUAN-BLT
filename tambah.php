<html>
<head>
</head>
<body>
    <h1>FORM BANTUAN BLT</h1>
    <form action ="proses.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama lengkap: </label>
                    <input type="text" name="nama"/>
                </p>
                <p>
                    <label for="jenis_bantuan">jenis_bantuan :</label>
                <label><input type="radio" name="jenis_bantuan" value="Tunai" />Tunai </label> 
                <label><input type="radio" name="jenis_bantuan" value="Non_Tunai" />Non_Tunai </label>
                <label><input type="radio" name="jenis_bantuan" value="Beras" />Beras </label>
                <label><input type="radio" name="jenis_bantuan" value="Minyak" />Minyak </label>
                <label><input type="radio" name="jenis_bantuan" value="Gula" />Gula </label>
               </p>
               <p>
                <input type= "sumbit" name="kirim_data" value="kirim_data" />
               </p>
            </fieldset>
        </form>
</body>
</html>