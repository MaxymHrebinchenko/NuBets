
import { mysql } from 'mysql';
const conn = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "lab4",
    connectionLimit: 10
});

var myLink = document.getElementById('u80_input');
//console.log(myLink.value);
myLink.onclick = function(){
    const a = myLink.value;
    conn.query("INSERT INTO eurovisionchart (Country, Year, Place, Jury, Televote VALUES (?, ?, ?, ?, ?))", [a, a, a, a, a], (err, res) => {
        if (err){
            return console.log(err);
        }
        console.log("Success!");
    });
  }



/* conn.end(err => {
    if (err){
        return console.log(err);
    }
}); */

