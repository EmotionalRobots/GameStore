//Chris Anderson

function myFunc(){
    document.getElementById("myFuncTester").innerHTML = "myFuncTester";
}
function showAllProducts() {

    var xmlhttp = new XMLHttpRequest();
    var str = "ALL";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("dynamicCategories").innerHTML = xmlhttp.responseText;
            document.getElementById("gameInfo").innerHTML = "";
        }
        else{
            document.getElementById("testArea").innerHTML = "Stat: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    // document.getElementById("dynamicCategories").innerHTML = "<p>asdasd</p>";

    
    xmlhttp.open("GET","updateCategories.php?q=" + str,true);
    xmlhttp.send();
}

function showPlaystationProducts() {
   var xmlhttp = new XMLHttpRequest();
   var str = "PS4";

   xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("dynamicCategories").innerHTML = xmlhttp.responseText;
            document.getElementById("gameInfo").innerHTML = "";

        }
        else{
            document.getElementById("testArea").innerHTML = "Stat: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    
    xmlhttp.open("GET","updateCategories.php?q=" + str,true);
    xmlhttp.send();
}

function showXboxProducts(){
    var xmlhttp = new XMLHttpRequest();
    var str = "XBOX";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("dynamicCategories").innerHTML = xmlhttp.responseText;
                        document.getElementById("gameInfo").innerHTML = "";

        }
        else{
            document.getElementById("testArea").innerHTML = "Stat: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    
    xmlhttp.open("GET","updateCategories.php?q=" + str,true);
    xmlhttp.send();
}

function showPCProducts(){
    var xmlhttp = new XMLHttpRequest();
    var str = "PC";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("dynamicCategories").innerHTML = xmlhttp.responseText;
                        document.getElementById("gameInfo").innerHTML = "";

        }
        else{
            document.getElementById("testArea").innerHTML = "Stat: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    
    xmlhttp.open("GET","updateCategories.php?q=" + str,true);
    xmlhttp.send();
}

function showNintendo3DSProducts(){
    var xmlhttp = new XMLHttpRequest();
    var str = "3DS";

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("dynamicCategories").innerHTML = xmlhttp.responseText;
                        document.getElementById("gameInfo").innerHTML = "";

        }
        else{
            document.getElementById("testArea").innerHTML = "Stat: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    
    xmlhttp.open("GET","updateCategories.php?q=" + str,true);
    xmlhttp.send();
}

function showGameInfo(x){
    var z = x;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("gameInfo").innerHTML = xmlhttp.responseText;
            document.getElementById("dynamicCategories").innerHTML = "";
        }
        else{
            document.getElementById("testArea").innerHTML = "Status: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    
    xmlhttp.open("GET","displayGameInfo.php?q=" + z,true);
    xmlhttp.send();
}

function validateForm() {
    // var cost = 0;

    var formCorrect = true;

    // Writes Required
    if(document.forms["CheckoutForm"].firstName.value == "") {
        document.getElementById("firstNameReq").innerHTML = "* Required";
        document.getElementById("firstNameReq").style.color = "red";
    } else {
        document.getElementById("firstNameReq").innerHTML = "";
    }
    if(document.forms["CheckoutForm"].lastName.value == "") {
        document.getElementById("lastNameReq").innerHTML = "* Required";        document.getElementById("lastNameReq").style.color = "red";

    } else {
        document.getElementById("lastNameReq").innerHTML = "";
    }
    if(document.forms["CheckoutForm"].address.value == "") {
        document.getElementById("addressReq").innerHTML = "* Required";        document.getElementById("addressReq").style.color = "red";

    } else {
        document.getElementById("addressReq").innerHTML = "";
    }

    if(document.forms["CheckoutForm"].zip.value == "") {

        document.getElementById("zipReq").innerHTML = "* Required";        document.getElementById("zipReq").style.color = "red";

    } else {
        document.getElementById("zipReq").innerHTML = "";
    }

    if(document.forms["CheckoutForm"].city.value == "") {

        document.getElementById("cityReq").innerHTML = "* Required";        document.getElementById("cityReq").style.color = "red";

    } else {
        document.getElementById("cityReq").innerHTML = "";
    }

    if(document.forms["CheckoutForm"].state.value == "") {

        document.getElementById("stateReq").innerHTML = "* Required";        document.getElementById("stateReq").style.color = "red";

    } else {
        document.getElementById("stateReq").innerHTML = "";
    }
    if(document.forms["CheckoutForm"].cardNumber.value == "") {
        document.getElementById("cardReq").innerHTML = "* Required";        document.getElementById("cardReq").style.color = "red";

    } else {
        document.getElementById("cardReq").innerHTML = "";
    }
    if(document.forms["CheckoutForm"].secCode.value == "") {
        document.getElementById("secCodeReq").innerHTML = "* Required";        document.getElementById("secCodeReq").style.color = "red";

    } else {
        document.getElementById("secCodeReq").innerHTML = "";
    }
    
    // checks for blank submissions
    if (document.forms["CheckoutForm"].firstName.value == "" || document.forms["CheckoutForm"].lastName.value == "" || document.forms["CheckoutForm"].cardNum.value == "" || document.forms["CheckoutForm"].secCode.value == "" || document.forms["CheckoutForm"].address.value == ""|| document.forms["CheckoutForm"].city.value == ""|| document.forms["CheckoutForm"].state.value == ""|| document.forms["CheckoutForm"].zip.value == "") {
        return false;
    }

    // costs
    if (document.getElementById('warranty').checked) {
        cost += 15;
    }
    if (document.getElementById('1shipping').checked) {
        cost += 25;
    }
    if (document.getElementById('2shipping').checked) {
        cost += 15;
    }
    if (document.getElementById('3shipping').checked) {
        cost += 5;

    }


    function submitContact(){
        var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("product1Name").innerHTML = "TEST";
            document.getElementById("alert").innerHTML = xmlhttp.responseText;
        }
        else{
            document.getElementById("testArea").innerHTML = "Status: " + this.status + "</br>readyState: " + this.readyState;
        }
    };
    
    xmlhttp.open("GET","contatSubmission.php", true);
    xmlhttp.send();
    }
}
