const getCsrfToken = async () => {
    const response = await fetch('http://localhost:8080', {method: 'GET', mode: 'cors'});
    console.log(response);
};

const main = async () => {
    // await getCsrfToken();
    document.getElementById('form').submit();
};

main()