<!-- returns html elements for dictionary.  -->



<!-- main icon to toggle dictionary panel being shown or not -->
<div class="icon_container">
    <ion-icon class='dict_toggle' name="book-outline" id=dict_toggle></ion-icon>
</div>


<!-- dictionary panel, position is fixed and display is set to none initially -->
<div class=dict_container id=dict_container>
    <ion-icon id=dict_close class=dict_close name="close-outline"></ion-icon>
    <h4 class="dict_header">type in a word to discover the meaning.</h4>
    <form id="dict_form" class="dict_form">
        <input class='dict_search_box' id="word_id" type="text">
        <input class="dict_search_btn" id="dict_search_btn" type="submit" value=search>
    </form>
    <div class="definition_container" id="definition_container">
        <p class='definition_text' id='definition_text'></p>
    </div>
</div>