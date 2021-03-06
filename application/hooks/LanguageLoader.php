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
            $ci->lang->load('bee2energy',$siteLang);
            $ci->lang->load('bee2waste',$siteLang);
            $ci->lang->load('bee2lighting',$siteLang);
            $ci->lang->load('bee2green',$siteLang);
            $ci->lang->load('bee2crop',$siteLang);
            $ci->lang->load('bee2citizen',$siteLang);
            $ci->lang->load('cargoebusiness',$siteLang);
            $ci->lang->load('bee2firedetection',$siteLang);
            $ci->lang->load('cargologistic',$siteLang);
            $ci->lang->load('contact',$siteLang);
            $ci->lang->load('footer',$siteLang);
        } else {
            $ci->lang->load('message','english');
            $ci->lang->load('header','english');
            $ci->lang->load('admin_p','english');
            $ci->lang->load('smartcities','english');
            $ci->lang->load('smartindustries','english');
            $ci->lang->load('agriculture','english');
            $ci->lang->load('energy','english');
            $ci->lang->load('greenspaces','english');
            $ci->lang->load('bee2energy','english');
            $ci->lang->load('bee2waste','english');
            $ci->lang->load('bee2lighting','english');
            $ci->lang->load('bee2green','english');
            $ci->lang->load('bee2crop','english');
            $ci->lang->load('bee2citizen','english');
            $ci->lang->load('cargoebusiness','english');
            $ci->lang->load('bee2firedetection','english');
            $ci->lang->load('cargologistic','english');
            $ci->lang->load('contact','english');
            $ci->lang->load('footer','english');
        }
    }
}
