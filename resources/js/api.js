import axios from "axios";

export const searchCountry = async (requestCountry) => {
    const response = await axios
        .post("/search", {
            country: requestCountry,
        })
        .then((response) => {
            return response;
        })
        .catch((err) => {
            console.log(err);
        });
        return response;
};
