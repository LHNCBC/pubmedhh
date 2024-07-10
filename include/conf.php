<?php
  $ncbi_key = "1a41ff51fec9ccebd1ad3d6a9d7a9edf370a";

  if (gethostname() == "lhc-lx-stage.nlm.nih.gov") {
    $recaptcha_sitekey = '6LfhDIUeAAAAAAA_sHuAwPryD07JOLSTCieqlsI6';
  } elseif (gethostname() == "pubmedhh-stage.lhcaws-test.nlm.nih.gov") {
    $recaptcha_sitekey = '6LfUH4UeAAAAAMRjQVHO1lFMzLLGUJh2i4Y4h7k-';
  } else {
    $recaptcha_sitekey = '6LfJKPEbAAAAADSPSvg9mPGiZA-xPbcJDCk_uLpm';
  }
?>
