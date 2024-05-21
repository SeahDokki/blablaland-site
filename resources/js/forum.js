$(document).ready(function() {
    $("#editor").wysibb({
        buttons: "bold,italic,underline,strike,|,justifyleft,justifycenter,justifyright,|,fontsize,fontcolor,|,smilebox,img,link,video,citer",
        lang: "fr",
        allButtons: {
            citer: {
                title: "Citer",
                buttonText: "Citer",
                modal: {
                    title: "Citer",
                    width: "600px",
                    tabs: [
                        {
                            input: [ //List of form fields
                                {param: "NAME",title:"Pseudo"},
                                {param: "CONTENT",title:"Contenu",type:"div"}
                            ]
                        }
                    ]
                },
                transform: {
                    '<div class="card card-body rounded-0"><strong>{NAME} a écrit :</strong>{CONTENT}</div>':'[quote={NAME}]{CONTENT}[/quote]'
                }
            }
        }
    })
})
