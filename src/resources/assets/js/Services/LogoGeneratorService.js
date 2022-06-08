import {URI} from '../env.js'
class LogoGeneratorService {
    static getLogo(){
        const logo = window.document.createElement('img');
        logo.src = `${URI}/assets/img/nerdPanda.png`;
        logo.classList.add('w-[128px]','h-[128px]','animate-pulse','block', "mr-auto","ml-auto");
        logo.alt = 'nerdPanda';
        return logo;
    }
}
export default LogoGeneratorService;
