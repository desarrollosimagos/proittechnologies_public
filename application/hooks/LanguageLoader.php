<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
		//~ $ci->session->sess_destroy();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('message',$siteLang);
            $ci->lang->load('header',$siteLang);
            $ci->lang->load('admin_p',$siteLang);
            $ci->lang->load('smartcities',$siteLang);
            $ci->lang->load('smartindustries',$siteLang);
            $ci->lang->load('agriculture',$siteLang);
            $ci->lang->load('energy',$siteLang);
            $ci->lang->load('greenspaces',$siteLang);
            $ci->lang->load('waste',$siteLang);
            $ci->lang->load('contact',$siteLang);
            $ci->lang->load('footer',$siteLang);
        } else {
            $ci->lang->load('message','english');
            $ci->lang->load('header','english');
            $ci->lang->load('admin_p','english');
            $ci->lang->load('smartcities',$siteLang);
            $ci->lang->load('smartindustries',$siteLang);
            $ci->lang->load('agriculture',$siteLang);
            $ci->lang->load('energy',$siteLang);
            $ci->lang->load('greenspaces',$siteLang);
            $ci->lang->load('waste',$siteLang);
            $ci->lang->load('contact','english');
            $ci->lang->load('footer','english');
        }
    }
}
