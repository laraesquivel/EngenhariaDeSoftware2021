import api from "./api.js"
export default{
    post:(obj)=>{
        return api.post("/cadastrar-usuario", obj)
    }
}