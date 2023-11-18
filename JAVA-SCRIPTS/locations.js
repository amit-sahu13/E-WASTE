fetch('JSON/locations.json')
.then(response=>{
    return response.json();
})
.then(objectData=>{
    let productData='';
    objectData.map((values)=>{
        productData+= ` <div class="card-1">
        <div class="address">
            <p class="company"><strong>${values.company}</strong></p>
            <p class="add">${values.address}</p>
            <p class="city">${values.city}</p>
            <p class="state">${values.state}</p>
        </div>
        <div class="direction">
            <a href="${values.link}" target="_blank"><button>Directions <i class="fa-solid fa-diamond-turn-right"></i></button></a>
        </div>
    </div> ` 
    })
    document.getElementById('cards').innerHTML=productData;
});

