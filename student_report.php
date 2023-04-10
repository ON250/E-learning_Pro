<?php
 session_start();
    include('config_database.php');
    if($_SESSION['nn']=="") {header("location:index.php");}
require "fpdf/fpdf.php";


              //theseb are sessions
          $course_name=$_SESSION['course_name'];
          $nbqts=$_SESSION['nb_qtions'];
          $corr=$_SESSION['nb_coreect'];
          $Wrong=$_SESSION['nb_wrong'];
          $general=$_SESSION['general'];

/**
 * 
 */
class myPDF extends FPDF
{
  function header()
  {
    $this->Image('ULK_logo.png',3,3);
    $this->SetFont('arial','B',25);
    $this->Cell(275,5,'REPUBLIC OF RWANDA',0,0,'C');
    $this->Cell(-276,28,'KIGALI  INDEPENDENT  UNIVERSITY',0,0,'C');
    $this->Cell(280,51,'ONLINE  EXAMINATION  SYSTEM',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    $this->Ln();
  }
  function footer()
  {
    $this->SetY(-15);
    $this->SetFont('cambria','B',15);
    $this->Cell(0,15,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    $this->Ln();
  }
   function headerTable($course_name,$nbqts,$corr,$Wrong,$general)
  {
    
    $this->cell(310,-42,'',0,1,'B');
    $this->SetFont('Times','B',20);
    $this->Cell(60,10,'',0,0,'C');
    $this->Cell(105,10,'REPORT OF THE EXAM OF '.$course_name,0,2,'B');
    $this->Ln(); 
    $this->SetFont('Times','',20);
    $this->Cell(200,10,'Number of Questions :  ',0,0,'C');
    $this->Cell(-74,10,$nbqts,0,1,'C');
    $this->Cell(220,10,'Number of Correct Answers :  ',0,0,'C');
    $this->Cell(-110,10,$corr,0,1,'C');
    $this->Cell(220,10,'Number of Wrong Answers :  ',0,0,'C');
    $this->Cell(-110,10,$Wrong,0,1,'C');
    $this->Cell(185,10,'General Marks :  ',0,0,'C');
    $this->Cell(-30,10,$general.' %',0,1,'C');
    $this->Ln();                                      
  }
  }
 $pdf=new myPDF();
  $pdf->AliasNbPages();
  $pdf->AddPage('L','A4',0);
  $pdf->headerTable($course_name,$nbqts,$corr,$Wrong,$general);
  $pdf->Output();

?>