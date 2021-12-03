<?php

function sweetalert($title, $message, $type, $time, $position=null)
{
  $position = $position ? $position : 'center';
  echo "<script type='text/javascript'>
  Swal.fire({
    icon: '$type',
    title: '$title',
    text: '$message',
    showConfirmButton: false,
    timer: $time,
    position: '$position',
  });
  </script>";
}
