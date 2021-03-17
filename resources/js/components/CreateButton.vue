<template>
    <div>
      <button @click="createBurger" class="mt-1 px-8 py-3 my-2 bg-yellow-400  text-white font-bold tracking-wide shadow hover:bg-yellow-500 hover:shadow-md rounded-md">Create</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            createBurger() {
                axios.post('/update/')
                .then(res => {
                    let obj = res.data;
                    let burgerContainer = document.getElementById('burger-container');

                    let types = ['bread', 'extra', 'vegetable', 'cheese', 'mfe', 'sauce'];

                    for (const i in types) {
                        let element = document.getElementById(types[i])
                        element.innerHTML = '';
                    }

                    var el = document.getElementById('burger-container');
                    while ( el.firstChild ) el.removeChild( el.firstChild );

                    let breadName = obj[0][0].name;
                
                    let divBreadTop = document.createElement("div");
                    divBreadTop.setAttribute('id', 'bread-t');
                    divBreadTop.innerHTML = breadName;
                    burgerContainer.appendChild(divBreadTop);

                
                   for (const key in obj) {
                     if (obj[key].length > 1) {
                        for (const i in obj[key]) {

                            let type = obj[key][i].type;
                            let name = obj[key][i].name;

                            // Create TEXT element for each ingredient
                            let txt = document.createElement("p");   
                            txt.innerHTML = '- ' + name;                   
                            document.getElementById(type).appendChild(txt);

                            // Create BURGER element
                            let div = document.createElement("div");
                            div.setAttribute('id', type);
                            div.innerHTML = name;
                            burgerContainer.appendChild(div);
                        }
                     } else {
                        let type = obj[key][0].type;
                        let name = obj[key][0].name;
                        if (type == 'bread') {
                            continue;
                        }

                        let txt = document.createElement("p");   
                        txt.innerHTML = '- ' + name;                   
                        document.getElementById(type).appendChild(txt);

                         let div = document.createElement("div");
                        div.setAttribute('id', type);
                        div.innerHTML = name;
                        burgerContainer.appendChild(div);
                     }
                   }

               
                    let divBreadBottom = document.createElement("div");
                    divBreadBottom.setAttribute('id', 'bread-b');
                    divBreadBottom.innerHTML = breadName;
                    burgerContainer.appendChild(divBreadBottom);

                })
                .catch(err => {
                    console.error(err); 
                })
            }
        }
    }
</script>
