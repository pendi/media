<?php
echo "<script language=\"Javascript\">\n";
echo "confirmed = window.confirm('Anda yakin akan mengahapus seluruh data ?');";
echo "if (confirmed)";
echo "{";
echo "window.alert('Anda menekan tombol OK');";
echo "}";
echo "else ";
echo "{";
echo "window.alert('Anda menekan tombol CANCEL');";
echo "}";
echo "</script>";
?>