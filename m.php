<!--<script Language = "javascript">

var email = "volcanoeserupt@gmail.com"
var subject = "subject"
var body = "body"


document.write("<form name="form" action=\"mailto:"+ email +"\?subject="+ subject +"\&body="+ body +"\" method=\"post\" enctype=\"text/plain\"></form>")

</script>-->

<script Language = "javascript">

var email = "email addresses"
// separate addresses by commas, no spaces //
var subject = "subject"
var body = "body"

document.write("<form name="form" action=\"mailto:"+ email +"\?subject="+ subject +"\&body="+ body +"\" method=\"post\" enctype=\"text/plain\"></form>")

</script>

<body onload="document.form.submit()">