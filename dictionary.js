// event listner for the dictionary icon. clicking the icon will show the 
// dictionary search interface
document.getElementById('dict_toggle').addEventListener('click', ()=>{
    dict_container = document.getElementById('dict_container')
    dict_container.style.display = 'flex'
});


// listener for the dictionary submit button. it sends a get request with the 
// word_id to RequestHandler.php which returns the definition or message to the user
document.getElementById('dict_form').addEventListener('submit', (e) => {

    e.preventDefault();
    word_id = document.getElementById('word_id').value        

    r = fetch('RequestHandler.php/?word_id='+word_id, {
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById('definition_text').innerHTML = data.toString()
        document.getElementById('definition_container').style.display = 'block'
    })
})


// event listner for the close icon. clicking will set the search interface
// containers css display value to none
document.getElementById('dict_close').addEventListener('click', ()=>{
    dict_container = document.getElementById('dict_container')
    dict_container.style.display = 'none'

} )
