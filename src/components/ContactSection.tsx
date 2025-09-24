import { useState } from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { useToast } from '@/hooks/use-toast';
import { 
  Mail, 
  Linkedin, 
  MapPin, 
  Clock, 
  Calendar,
  Phone 
} from 'lucide-react';

const ContactSection = () => {
  const { toast } = useToast();
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    company: '',
    subject: '',
    message: ''
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    
    // Validation simple
    if (!formData.name || !formData.email || !formData.subject || !formData.message) {
      toast({
        title: "Erreur",
        description: "Veuillez remplir tous les champs obligatoires.",
        variant: "destructive",
      });
      return;
    }

    // Simulation d'envoi
    toast({
      title: "Message envoyé !",
      description: "Merci pour votre message. Je vous répondrai sous 24h.",
    });
    
    // Reset form
    setFormData({
      name: '',
      email: '',
      company: '',
      subject: '',
      message: ''
    });
  };

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({
      ...prev,
      [field]: value
    }));
  };

  const contactInfo = [
    {
      icon: Mail,
      title: 'Email',
      value: 'thierry@thierry-robert.eu',
      description: 'Réponse sous 24h'
    },
    {
      icon: Linkedin,
      title: 'LinkedIn',
      value: 'Thierry Robert',
      description: 'Stratégie Marketing Internationale'
    },
    {
      icon: MapPin,
      title: 'Localisation',
      value: 'Europe / Nordique',
      description: 'Interventions sur site possibles'
    },
    {
      icon: Clock,
      title: 'Consultation gratuite',
      value: '30 minutes pour discuter de vos enjeux internationaux et voir comment mon expertise peut vous aider.',
      description: ''
    }
  ];

  return (
    <section id="contact" className="py-20 bg-neutral-50">
      <div className="container mx-auto px-4">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl lg:text-5xl font-bold text-neutral-800 mb-6">
            Contact
          </h2>
          <p className="text-xl text-neutral-600 max-w-3xl mx-auto mb-8">
            Discutons de votre projet international
          </p>
          <p className="text-lg text-neutral-600 max-w-4xl mx-auto">
            Que vous souhaitiez explorer les marchés nordiques ou développer votre stratégie 
            internationale, je serais ravi d'échanger avec vous.
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-16">
          {/* Contact Info */}
          <div className="space-y-8">
            <h3 className="text-2xl font-semibold text-neutral-800 mb-8">
              Prenons contact
            </h3>

            <div className="space-y-6">
              {contactInfo.map((info, index) => (
                <div key={index} className="flex items-start gap-4">
                  <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <info.icon className="w-6 h-6 text-blue-600" />
                  </div>
                  <div className="flex-1">
                    <h4 className="font-semibold text-neutral-800 mb-1">
                      {info.title}
                    </h4>
                    <p className="text-neutral-700 mb-1">
                      {info.value}
                    </p>
                    {info.description && (
                      <p className="text-sm text-neutral-500">
                        {info.description}
                      </p>
                    )}
                  </div>
                </div>
              ))}
            </div>

            <div className="pt-6">
              <Button className="btn-orange">
                <Calendar className="w-4 h-4 mr-2" />
                Réserver un créneau
              </Button>
            </div>
          </div>

          {/* Contact Form */}
          <div className="bg-white rounded-2xl p-8 shadow-lg">
            <h3 className="text-2xl font-semibold text-neutral-800 mb-6">
              Envoyez-moi un message
            </h3>

            <form onSubmit={handleSubmit} className="space-y-6">
              <div className="grid md:grid-cols-2 gap-4">
                <div>
                  <label htmlFor="name" className="block text-sm font-medium text-neutral-700 mb-2">
                    Nom *
                  </label>
                  <Input
                    id="name"
                    value={formData.name}
                    onChange={(e) => handleInputChange('name', e.target.value)}
                    className="w-full"
                    required
                  />
                </div>
                <div>
                  <label htmlFor="email" className="block text-sm font-medium text-neutral-700 mb-2">
                    Email *
                  </label>
                  <Input
                    id="email"
                    type="email"
                    value={formData.email}
                    onChange={(e) => handleInputChange('email', e.target.value)}
                    className="w-full"
                    required
                  />
                </div>
              </div>

              <div>
                <label htmlFor="company" className="block text-sm font-medium text-neutral-700 mb-2">
                  Entreprise
                </label>
                <Input
                  id="company"
                  value={formData.company}
                  onChange={(e) => handleInputChange('company', e.target.value)}
                  className="w-full"
                />
              </div>

              <div>
                <label htmlFor="subject" className="block text-sm font-medium text-neutral-700 mb-2">
                  Sujet *
                </label>
                <Input
                  id="subject"
                  value={formData.subject}
                  onChange={(e) => handleInputChange('subject', e.target.value)}
                  className="w-full"
                  required
                />
              </div>

              <div>
                <label htmlFor="message" className="block text-sm font-medium text-neutral-700 mb-2">
                  Message *
                </label>
                <Textarea
                  id="message"
                  value={formData.message}
                  onChange={(e) => handleInputChange('message', e.target.value)}
                  className="w-full h-32 resize-none"
                  required
                />
              </div>

              <div className="flex flex-col sm:flex-row gap-4">
                <Button type="submit" className="btn-primary flex-1">
                  <Mail className="w-4 h-4 mr-2" />
                  Envoyer le message
                </Button>
                <Button type="button" className="btn-secondary">
                  <Phone className="w-4 h-4 mr-2" />
                  Programmer un appel
                </Button>
              </div>

              <p className="text-xs text-neutral-500">
                * Champs obligatoires. Vos données sont traitées de manière confidentielle 
                et ne seront pas partagées avec des tiers.
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;