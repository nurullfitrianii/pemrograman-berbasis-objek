<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
    <style>
        body { 
            font-family: "Times New Roman", Times, serif; 
            padding: 20px;
        }
        
        h3 { 
            font-size: 16px;
            font-weight: bold;
            margin-top: 0; 
            margin-bottom: 10px;
        }
        
        table {
            border-collapse: collapse;
        }
        table td { 
            padding: 2px 5px;
        }

        input[type="text"], input[type="password"] {
            width: 150px;
            padding: 2px;
            border: 1px solid #000;
        }
    
        input[type="submit"], input[type="reset"] {
            padding: 2px 10px;
            margin-right: 5px;
            border: 1px solid #000;
            background-color: #f0f0f0;
            font-family: "Times New Roman", Times, serif; 
            font-size: 12px;
        }

        .form-label {
            font-weight: normal; 
        }
    </style>
</head>
<body>
    
    <h3>Form Login</h3>
    <?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"){
        echo "<p style='color:red; font-size:14px;'>Login gagal! Username atau password salah.</p>";
    } else if(isset($_GET['pesan']) && $_GET['pesan'] == "logout"){
        echo "<p style='color:blue; font-size:14px;'>Anda berhasil logout.</p>";
    } else if(isset($_GET['pesan']) && $_GET['pesan'] == "belum_login"){
    }
    ?>
    <form method="post" action="aksi-login.php">
        <table>
            <tr>
                <td class="form-label">Username</td>
                <td>:</td> 
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td class="form-label">Password</td>
                <td>:</td> 
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        
        <div style="margin-top: 5px;">
             <input type="submit" value="Login">
             <input type="reset" value="Reset">
        </div>
    </form>
    
</body>
</html>