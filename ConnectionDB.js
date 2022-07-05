const  mysql  = require("mysql");
const pool = mysql.createPool({
    host: "localhost",
    user: "root",
    database: "betting_system",
    password: "",
    connectionLimit: 10
});
    var error = "", field = "", field2 = "", errr = '', errr2='', errr3 ='';
   
    field = '0912345678';
    errr='12345678';
    pool.query("SELECT * FROM customers WHERE phone_number = '"+field+"' AND password = '" + errr+"'", (err, res) => {
        if (err){
            return console.log(err);
        }
        if (res.length==0){
          error += "Невірний телефон або пароль!\r\n";
        }
        
    });

    if (error=="") { console.log("0 ошибок"); }
    else {
        console.log(error);
    }
    

