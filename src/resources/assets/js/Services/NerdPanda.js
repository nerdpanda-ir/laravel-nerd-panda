import BodyPrependerService from "./BodyPrependerService.js";
import LogoGeneratorService from "./LogoGeneratorService.js";
export default class Application {
    constructor() {
        window.addEventListener('load',this.handle);
    }
    handle() {
        BodyPrependerService.prepend(LogoGeneratorService.getLogo())
    }
}
