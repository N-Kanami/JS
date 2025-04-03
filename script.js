window.addEventListener('load', function(){
    const pullDownButton = document.getElementById("lists")
    console.log(pullDownButton)
})

const pullDownButton = document.getElementById("lists");

pullDownButton.addEventListener('mouseover',function(){
    pullDownButton.setAttribute("style", "background-color:blue;")
    console.log('乗ったときは青色')
})

pullDownButton.addEventListener('mouseout',function(){
    pullDownButton.removeAttribute("style", "background-color:blue;")
    console.log('外れた時は赤色')
})

pullDownButton.addEventListener('click',function(){
    pullDownButton.setAttribute("style", "background-color:green;")
    console.log('クリック時は緑色')
})

