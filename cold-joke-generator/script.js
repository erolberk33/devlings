const saka = document.querySelector('#sakayazi');
const btn = document.querySelector('.btn');

btn.addEventListener('click', sakayazi);
sakayazi();

async function sakayazi() {
    const config = {
        headers: {
            Accept: 'application/json',
        },
    };
    const res = await fetch("https://icanhazdadjoke.com/", config);
    const data = await res.json();
    console.log(data);

    // Orijinal espriyi göster
    saka.innerText = data.joke;

 
}

 