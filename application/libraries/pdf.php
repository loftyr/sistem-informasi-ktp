<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * CodeIgniter DomPDF Library
 *
 * Generate PDF's from HTML in CodeIgniter
 *
 * @packge        CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Ardianta Pargo
 * @license        MIT License
 * @link        https://github.com/ardianta/codeigniter-dompdf
 */

use Dompdf\Dompdf;

class Pdf extends Dompdf
{
    /**
     * PDF filename
     * @var String
     */
    public $filename;
    public function __construct()
    {
        parent::__construct();
        $this->filename = "laporan.pdf";
    }
    /**
     * Get an instance of CodeIgniter
     *
     * @access    protected
     * @return    void
     */
    protected function ci()
    {
        return get_instance();
    }
    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access    public
     * @param    string    $view The view to load
     * @param    array    $data The view data
     * @return    void
     */
    public function generate($view, $data, $nama_file)
    {
        $html = $this->ci()->load->view($view, $data, TRUE);
        $this->load_html($html);
        // Render the PDF
        $this->render();

        // get Canvas 
        $canvas = $this->get_canvas();

        $canvas->page_text(37, 580, "Page: {PAGE_NUM} of {PAGE_COUNT}", '', 9, array(0, 0, 0));

        // Output the generated PDF to Browser
        $this->stream($nama_file, array("Attachment" => 0));
    }
}
