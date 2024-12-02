const btn_mobile = document.getElementById("btn_menu_mobile");

/**
 * Adiciona e romve a classe active ao menu
 *
 * @return {void}
 */
function toggle_menu() {
  const menu_header = document.getElementById("menu_header");
  menu_header.classList.toggle("active");
}

btn_mobile.addEventListener("click", toggle_menu);
