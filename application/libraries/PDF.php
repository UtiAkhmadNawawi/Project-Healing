<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

class PDF extends Dompdf {
    public function __construct() {
        parent::__construct();
    }

    public function generate($html, $filename='', $stream=TRUE, $paper='A4', $orientation='portrait') {
        $this->set_paper($paper, $orientation);
        
        // Mengatur path untuk file CSS eksternal
        $this->set_base_path('/AdminCSS/assets/css/admin.css');
        
        // Mengatur opsi untuk memuat CSS eksternal
        $this->set_option('isRemoteEnabled', true);
        
        // Memuat HTML dengan CSS eksternal
        $this->load_html($html);
        
        $this->render();
        
        if ($stream) {
            $this->stream($filename . '.pdf', array('Attachment' => 0));
        } else {
            return $this->output();
        }
    }
    
}
