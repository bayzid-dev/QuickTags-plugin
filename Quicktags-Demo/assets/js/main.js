// QTags.addButton( id, display, arg1, arg2, access_key, title, priority, instance );
QTags.addButton("qtsd-button-one", "S", "<p>", "</p>");
QTags.addButton("qtsd-button-two", "JS", qtsd_button_two);
QTags.addButton("qtsd-button-three", "JS", qtsd_fap_preview);

function qtsd_button_two() {
  var name = prompt(" What is your name");
  var Text = "my name is " + name;
  QTags.insertContent(Text);
}

// tb_show function is to display the popup box
function qtsd_fap_preview() {
  tb_show("Fontawesome", qtsd.preview);
}

function insertFA(icon) {
  QTags.insertContent('<i class="' + icon + '"></i>');
}
