<html> 

<head>     
    <title>Form Input Data Mahasiswa</title> 
</head>  
<body>     
    <center>         
        <form action="<?= base_url('mahasiswa/cetak'); ?>" 
        method="post">             
        <table>                 
            <tr>                     
                <th colspan="3">                         
                    Form Input Data Mahasiswa                     
                </th>                 
            </tr> 
            <tr>                     
                <td colspan="3">                         
                    <hr>                     
                </td>                 
            </tr>                 
            <tr>                     
                <th>Nama Mahasiswa</th>                     
                <th>:</th>                     
                <td>                         
                    <input type="text" name="nama" id="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr>                 
            <tr>                     
                <th>NIS</th>                     
                <td>:</td>                     
                <td>                         
                    <input type="varchar" name="nis" id="nis"> 
                    <?= form_error('nis', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr> 
            <tr>                     
                <th>Kelas</th>                     
                <th>:</th>                     
                <td>                         
                    <input type="text" name="kelas" id="kelas">
                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr>  
            <tr>                     
                <th>Tanggal Lahir</th>                     
                <th>:</th>                     
                <td>                         
                    <input type="date" name="tgl_lahir" id="tgl_lahir">
                    <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr>    
            <tr>                     
                <th>Tempat Lahir</th>                     
                <th>:</th>                     
                <td>                         
                    <input type="text" name="tmpt_lahir" id="tmpt_lahir">
                    <?= form_error('tmpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr> 
            <tr>                     
                <th>Alamat</th>                     
                <th>:</th>                     
                <td>                         
                    <input type="text" name="alamat" id="alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr>     
            <tr>                     
                <th>Jenis Kelamin</th>                     
                <th>:</th>                     
                <td>                         
                    <input type="radio" name="jns_kelamin" id="jns_kelamin"value="Laki-laki">Laki-laki<br>
                    <input type="radio" name="jns_kelamin" id="jns_kelamin"value="Perempuan">Perempuan<br>
                    <?= form_error('jns_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>                     
                </td>                 
            </tr>                                        
            <tr>                     
                <th>Agama</th>                     
                <td>:</td>                     
                <td>                         
                    <select name="agama" id="agama">                             
                        <option value="">Pilih Agama</option>                             
                        <option value="">Islam</option>                             
                        <option value="">Kristen</option>                             
                        <option value="">Katholik</option>
                        <option value="">Budha</option>    
                        <option value="">Hindu</option>
                        <option value="">Protestan</option>
                        <option value="">Konghucu\

                        </option>                   
                    </select>                     
                </td>                 
            </tr>                 
            <tr>                     
                <td colspan="3" align="center">                         
                    <input type="submit" value="Submit">                     
                </td>                 
            </tr>             
        </table>         
    </form>     
</center> 
</body> 
 
</html>