function myfacebookFunction() /* javaScript function for login with facebook */
{

    var facebook = (confirm ("Do you want to Sign With Your Facebook Account")); /* display confirmation box */

        if(facebook) {

            window.open("https://www.facebook.com/");   /* Connect to facebook */

        }

        else {

            alert("Register-Here"); // dispplay register if press cancel

        }
}


function myGoogleFunction(){ /* javaScript function for login with google account */



    var facebook = (confirm ("Do you want to Sign With Your Google Account")); /* display confirmation box */


        if(facebook) {

            window.open("https://myaccount.google.com/"); /* Connect to goolge*/

        }

        else {

            alert("Register-Here"); // dispplay register if press cancel
 
        }
}

function myNewFunction() /* javaScript function for return to page*/
{

    var back = (confirm ("Do you want to go Home Page")); /* display confirmation box */

        if(back) {

            window.open("home.html"); /* Connect to home page */

        }

        else {

            alert("Register-Here");  // dispplay register if press cancel

        }
}