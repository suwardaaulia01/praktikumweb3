<?php

function kelulusan($nilai_akhir)
{
    if($nilai_akhir > 55)
    {
        return 'LULUS';
    } 
    elseif($nilai_akhir < 56)
    {
        return 'TIDAK LULUS';
    }
    else
    {
        return 'TIDAK VALID';
    }
}

function grade($nilai_akhir)
{
    if ($nilai_akhir>=85) {
        return 'A';
    } 
    elseif($nilai_akhir>=70) {
        return 'B';
    } 
    elseif($nilai_akhir>=56) {
        return 'C';
    } 
    elseif($nilai_akhir>=36) {
        return 'D';
    } 
    else{
        return 'TIDAK VALID';
    }
}




?>