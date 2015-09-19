//  <?php
//  while(i<0){
//  echo "@media (max-width:"1200px" ){
//  	.container {
//  		margin:0 auto;
//  		padding: 0;		
//  		width:"1170"px
//  	}

//  	/* Row to make separat continer cause jumb unnessery commponent up*/
//  	/* Esssssssssential because of col %%%%%%% */
//  	.row {
//  		width:"1170"px;
//  		margin:0 auto;
//  		padding: 0;
//  		float: left;


//  	}

//  	/*When website at PC it will be with this width 60 & 20 */
//  	.col-variable-1{width:"8.333333%";}
//  	.col-variable-2{width:"16.66666667%";}
//  	.col-variable-3{width:"25%";}
//  	.col-variable-4{width:"33.3333333%";}
//  	.col-variable-5{width:"41.6666667%";}
//  	.col-variable-6{width:"50%";}
//  	.col-variable-7{width:"58.3333333%";}
//  	.col-variable-8{width:"66.6666667%";}
//  	.col-variable-9{width:"75%";}
//  	.col-variable-10{width:"83.3333333%";}
//  	.col-variable-11{width:"91.6666667%";}
//  	.col-variable-12{width:"100%";}

// /* NOTE combine row with col- [e.g .row.col-variable-2 ]is anather way but diffecult
// because you use both different divs under each other*/

// .col-PC-1{width:"8.333333%";}
// .col-PC-2{width:"16.66666667%";}
// .col-PC-3{width:"25%";}
// .col-PC-4{width:"33.3333333%";}
// .col-PC-5{width:"41.6666667%";}
// .col-PC-6{width:"50%";}
// .col-PC-7{width:"58.3333333%";}
// .col-PC-8{width:"66.6666667%";}
// .col-PC-9{width:"75%";}
// .col-PC-10{width:"83.3333333%";}
// .col-PC-11{width:"91.6666667%";}
// .col-PC-12{width:"100%";}


// }"






// }
// ?>

<?php

$deviceWidth=1200;

$columnWidth=($deviceWidth*8.3333333)/100;
echo ".col-variable-1 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*16.6666666)/100;
echo "<br/>";
echo ".col-variable-2 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*25)/100;
echo "<br/>";
echo ".col-variable-3 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*33.3333333)/100;
echo "<br/>";
echo ".col-variable-4 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*41.6666667)/100;
echo "<br/>";
echo ".col-variable-5 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*50)/100;
echo "<br/>";
echo ".col-variable-6 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*58.3333333)/100;
echo "<br/>";
echo ".col-variable-7 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*66.6666667)/100;
echo "<br/>";
echo ".col-variable-8 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*75)/100;
echo "<br/>";
echo ".col-variable-9 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*83.3333333)/100;
echo "<br/>";
echo ".col-variable-10 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*91.6666667)/100;
echo "<br/>";
echo ".col-variable-11 {width:".$columnWidth."px;";
$columnWidth=($deviceWidth*100)/100;
echo "<br/>";
echo ".col-variable-12 {width:".$columnWidth."px;";



$deviceWidth=$deviceWidth-4;

?>