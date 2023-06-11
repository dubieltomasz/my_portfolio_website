window.onscroll = function(){
  if(document.body.scrollTop > 400 || document.documentElement.scrollTop > 400){
    document.getElementById("to_top_button").style.display = "block";
  } else{
    document.getElementById("to_top_button").style.display = "none";
  }
}

function go_to_top() {
  window.scrollTo({top: 0, behavior: 'smooth'});
}

function read(id) {
  let moreText = document.getElementById(id);
  let btnText = document.getElementById("show_button_"+id);
  
  if (moreText.style.display === "none") {
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  } else {
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  }
}

document.addEventListener("click", (event) => {
  const shift = event.getModifierState("Shift");
  const ctrl = event.getModifierState("Control");

  if(shift == true && ctrl == true)
    if(document.getElementById("to_admin").style.display == "inline"){
      document.getElementById("to_admin").style.display = "none";
      console.log("Admin pannel button shown");
    }else{
      document.getElementById("to_admin").style.display = "inline";
      console.log("Admin pannel button hidden");
    }
});