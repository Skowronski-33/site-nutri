<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Novo Contato</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; padding: 20px;">
    <div style="max-w: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
        <h2 style="color: #333; margin-top: 0; border-bottom: 2px solid #728c69; padding-bottom: 10px;">Novo contato via Landing Page</h2>
        
        <p style="color: #555; line-height: 1.6;">Você recebeu uma nova mensagem pelo formulário do site. Confira os detalhes abaixo:</p>
        
        <table style="width: 100%; margin-top: 20px; border-collapse: collapse;">
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; width: 30%; color: #888;"><strong>Nome:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #333;">{{ $data['nome'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #888;"><strong>E-mail:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #333;">{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #888;"><strong>Telefone:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #333;">{{ $data['telefone'] ?? 'Não informado' }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #888; vertical-align: top;"><strong>Mensagem:</strong></td>
                <td style="padding: 10px; border-bottom: 1px solid #eee; color: #333; white-space: pre-wrap;">{{ $data['mensagem'] }}</td>
            </tr>
        </table>
        
        <p style="color: #999; font-size: 12px; margin-top: 30px; text-align: center;">Este e-mail foi gerado automaticamente pelo seu site.</p>
    </div>
</body>
</html>
