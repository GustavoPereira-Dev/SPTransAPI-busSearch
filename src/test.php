<?php

include 'SPTrans.php';

echo json_encode(buscaOnibus('1177')[0]['lt'][2], JSON_UNESCAPED_UNICODE);