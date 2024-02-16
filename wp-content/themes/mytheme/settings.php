<?php


if (!is_admin()) {
    return;
}

//lägger till ett menu alternative i dashboard settings
function mytheme_add_settings() {
    add_submenu_page(
        "options-general.php",
        "Butik001",           
        "My Theme Setting",   
        "edit_pages",         
        "my_butik_id",        
        "mytheme_add_setting_callback"
    );
}
add_action('admin_menu', 'mytheme_add_settings');

function mytheme_add_setting_callback() {
?>
    <div class="wrap">
        <h2 style="margin-bottom: 30px;">My Theme Settings</h2>
        <form action="options.php" method="post">
            <?php
                settings_fields("butik");
                do_settings_sections("butik"); 
                submit_button();
            ?>
        </form>
    </div>
<?php
}

//registrerar inställningar tillgängliga på sidan "Butik"
function mytheme_add_settings_init()
{
    //===========================
    // add block  butik_general
    //===========================
    add_settings_section(
        'butik_general', 
        'Store General Setting',
        'mytheme_add_settings_section_general',
        'butik'
    );

    //===========================
    //add content into butik_general
    //===========================
    register_setting(
        "butik", 
        "store_message"
    );

    add_settings_field(
        "store_message", 
        "Store Message",
        "mytheme_section_setting",
        "butik", 
        "butik_general", 
        array(           
            "option_name" => "store_message",
            "option_type" => "text"
        )
    );

    //------------------
    // name
    //------------------
    register_setting(
        "butik",
        "store_name"
    );

    add_settings_field(
        "store_name", 
        "Store Name",
        "mytheme_section_setting",
        "butik",                  
        "butik_general",          
        array(                    
            "option_name" => "store_name",
            "option_type" => "text"
        )
    );

    //------------------
    // address
    //------------------
    register_setting(
        "butik",
        "store_address"
    );

    add_settings_field(
        "store_address", 
        "Store Address",
        "mytheme_section_setting",
        "butik",                  
        "butik_general",          
        array(                    
            "option_name" => "store_address",
            "option_type" => "text"
        )
    );
    //------------------
    // post number
    //------------------
    register_setting(
        "butik",
        "store_post"
    );

    add_settings_field(
        "store_post",  
        "Store Post Number", 
        "mytheme_section_setting", 
        "butik",                   
        "butik_general",           
        array(                     
            "option_name" => "store_post",
            "option_type" => "number"
        )
    );
    //------------------
    // city
    //------------------
    register_setting(
        "butik",
        "store_city"
    );

    add_settings_field(
        "store_city",
        "Store City",
        "mytheme_section_setting",
        "butik",                  
        "butik_general",          
        array(                    
            "option_name" => "store_city",
            "option_type" => "text"
        )
    );

    //------------------
    // country
    //------------------
    register_setting(
        "butik",
        "store_country"
    );

    add_settings_field(
        "store_country", 
        "Store Country", 
        "mytheme_section_setting",
        "butik",                  
        "butik_general",          
        array(                    
            "option_name" => "store_country",
            "option_type" => "text"
        )
    );

    //------------------
    // copyright
    //------------------
    register_setting(
        "butik",
        "store_copyright"
    );

    add_settings_field(
        "store_copyright",
        "Store Copyright",
        "mytheme_section_setting",
        "butik", 
        "butik_general",
        array(
            "option_name" => "store_copyright",
            "option_type" => "text"
        )
    );

    //------------------
    // open hours
    //------------------
    register_setting(
        "butik",
        "store_open"
    );

    add_settings_field(
        "store_open",              //id
        "Open Time",               //title(will be shown on setting-butik page)
        "mytheme_section_setting", //callback function
        "butik",                   //page
        "butik_general",           //section
        array(                     //multiple parameter
            "option_name" => "store_open",
            "option_type" => "time"
        )
    );

    //------------------
    // show message checkbox
    //------------------
    register_setting(
        "butik",
        "store_show_message"
    );

    add_settings_field(
        "show_message",           //id
        "Show Message",           //title(will be shown on setting-butik page)
        "mytheme_section_setting", //callback function
        "butik",                   //page
        "butik_general",           //section
        array(                     //multiple parameter
            "option_name" => "store_show_message",
            "option_type" => "checkbox"
        )
    );
}
add_action('admin_init', 'mytheme_add_settings_init');


function mytheme_add_settings_section_general()
{
    echo "<hr>";
    echo "<p> General settings for the store.</p>";
    echo "<hr>";
}

// Ritar ut inställningsfältet
function mytheme_section_setting($args)
{
    $option_name = $args["option_name"];
    $option_type = $args["option_type"];
    $option_value = get_option($args["option_name"]);
    //skriv in i DB
    // echo '<input type="text" id="store_message" name="store_message" value="'. $value. '"/>';
    echo '<input type="' . $option_type . '" 
                 id="' . $option_name . '" 
                 name="' . $option_name . '" 
                 value="' . $option_value . '"
          />';
}



function mytheme_add_top_block_settings_init()
{
    add_settings_section(
        'top_block', 
        'Top Block Setting', 
        'mytheme_add_project_top_settings_section_general',
        'butik'                       
    );

    register_setting(
        "butik",  
        "top_block_title_1"
    );

    add_settings_field(
        "top_block_title_1",
        "Title_1",          
        "mytheme_section_setting",
        "butik",                  
        "top_block",              
        array(                    
            "option_name" => "top_block_title_1",
            "option_type" => "text"
        )
    );

    register_setting(
        "butik", 
        "top_block_title_2"
    );

    add_settings_field(
        "top_block_title_2",
        "Title_2",          
        "mytheme_section_setting",
        "butik",                  
        "top_block",              
        array(                    
            "option_name" => "top_block_title_2",
            "option_type" => "text"
        )
    );

    register_setting(
        "butik",    
        "top_block_image" 
    );

    add_settings_field(
        "top_block_image",
        "Image Url",      
        "mytheme_section_setting", 
        "butik",                   
        "top_block",              
        array(                    
            "option_name" => "top_block_image",
            "option_type" => "text"
        )
    );

}
add_action('admin_init', 'mytheme_add_top_block_settings_init');

function mytheme_add_project_top_settings_section_general()
{
    echo "<hr>";
    echo "<hr>";
    echo "<p> Top Block shortcode setting</p>";
    echo "<hr>";
}
