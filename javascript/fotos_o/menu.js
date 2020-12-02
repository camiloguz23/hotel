

export default function menu(menu){
    console.log("holi");
    let $menuscroll = document.querySelector(menu);
    console.log($menuscroll)
    window.addEventListener("scroll",(e)=>{
        let $scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if($scrollTop > 120){
            $menuscroll.classList.add("translate");
        }else {
            $menuscroll.classList.remove("translate");
        }
    })
}