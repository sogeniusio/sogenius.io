/*
===========================
Auto Sluggify
https://jsfiddle.net/agaust/xht31h97/2/
*/

function slugify(text) {
    // https://gist.github.com/mathewbyrne/1280286
    return text.toString().toLowerCase()
      .replace(/\s+/g, '-')           // Replace spaces with -
      .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
      .replace(/\-\-+/g, '-')         // Replace multiple - with single -
      .replace(/^-+/, '')             // Trim - from start of text
      .replace(/-+$/, '')             // Trim - from end of text
      .replace(/[\s_-]+/g, '-');
}

$('.title').keyup(function(){
    //console.log($(this).val());
    $slug = slugify($(this).val());
    $('.slug').val($slug);
})

/*
===========================
Add div wrapper around code elements
*/

function codewrapper(){
  org_html = document.get("code-toolbar").innerHTML;
  new_html = "<div id='code-wrapper'>" + org_html + "</div>";
  document.getElementById("code-toolbar").innerHTML = new_html;

}
