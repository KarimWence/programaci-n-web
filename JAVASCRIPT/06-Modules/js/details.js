import { getBreedDetails } from "./api.js";
import { displayBreedDetails } from "./ui.js";

const breedId = new URLSearchParams(window.location.search).get('id');

async function loadBreedsDetails(id) {
    const breedDetails = await getBreedDetails(id);
    if(breedDetails) {
        displayBreedDetails(breedDetails);
    } else {
        alert("Ha ocurrido un error.");
    }
}

window.addEventListener('DOMContentLoaded', () => loadBreedsDetails(breedId));