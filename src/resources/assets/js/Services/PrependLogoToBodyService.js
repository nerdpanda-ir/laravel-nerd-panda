import LogoGeneratorService from "./LogoGeneratorService.js";
import BodyPrependerService from "./BodyPrependerService.js";
export default class PrependLogoToBodyService{
    static prepend(){
        BodyPrependerService.prepend(LogoGeneratorService.getLogo())
    }
}
