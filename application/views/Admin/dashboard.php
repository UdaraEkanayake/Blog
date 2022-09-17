
<?php include 'includes/header.php' ;

if ($this->session->flashdata('welcome')){
    echo "<h3>".$this->session->flashdata('welcome')."</h3>";
}
?> 

<?php include 'includes/footer.php' ; ?>