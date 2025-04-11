const cpf = document.querySelector('#cpf')

cpf.addEventListener('input', function () {
    let limparValor = cpf.value.replace(/\D/g, "").substring(0, 11)

    let cpfFormatado = ""

    if (limparValor.length > 0) {
        cpfFormatado = limparValor.substring(0, 3)
    }
    if (limparValor.length >= 4) {
        cpfFormatado += "." + limparValor.substring(3, 6)
    }
    if (limparValor.length >= 7) {
        cpfFormatado += "." + limparValor.substring(6, 9)
    }
    if (limparValor.length >= 10) {
        cpfFormatado += "-" + limparValor.substring(9, 11)
    }

    cpf.value = cpfFormatado
})


const tel = document.querySelector('#telefone')

tel.addEventListener('input', function() {
    let limparValor = tel.value.replace(/\D/g, "").substring(0, 11)

    let numerosArray = limparValor.split("")
    let telFormatado = ""

    if(numerosArray.length > 0) {
        telFormatado += `(${numerosArray.slice(0, 2).join("")})`
    }

    if(numerosArray.length > 2) {
        telFormatado += `${numerosArray.slice(2, 7).join("")}`
    }

    if(numerosArray.length > 7) {
        telFormatado += `-${numerosArray.slice(7, 11).join("")}`
    }

    tel.value = telFormatado
})

const dataNascimento = document.querySelector('#nascimento')
const anoAtual = new Date().getFullYear()

dataNascimento.addEventListener('input', function () {
    let valor = dataNascimento.value.replace(/\D/g, "").substring(0, 8)
    let ano = valor.substring(0, 4)
    let mes = valor.substring(4, 6)
    let dia = valor.substring(6, 8)

    // Limita o ano para não ultrapassar o atual
    if (ano.length === 4) {
        const a = parseInt(ano)
        if (a > anoAtual) {
            ano = anoAtual.toString()
        }
    }

    // Limita o mês até 12
    if (mes.length === 2) {
        const m = parseInt(mes)
        if (m > 12) mes = "12"
        else if (m === 0) mes = "01"
    }

    // Limita o dia até 31
    if (dia.length === 2) {
        const d = parseInt(dia)
        if (d > 31) dia = "31"
        else if (d === 0) dia = "01"
    }

    // Atualiza o input com a data formatada no padrão SQL
    let formatado = ano
    if (mes.length > 0) formatado += "-" + mes
    if (dia.length > 0) formatado += "-" + dia

    dataNascimento.value = formatado
})

