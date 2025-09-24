import { Globe, Linkedin, Mail, MapPin } from 'lucide-react';

const Footer = () => {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="bg-neutral-800 text-white py-12">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-4 gap-8">
          {/* Brand */}
          <div className="space-y-4">
            <div className="flex items-center gap-3">
              <div className="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                <Globe className="w-6 h-6 text-white" />
              </div>
              <span className="text-xl font-semibold">Thierry Robert</span>
            </div>
            <p className="text-neutral-400 text-sm leading-relaxed">
              Expert en marketing international et stratégie culturelle. 
              Spécialisation unique dans les cultures nordiques.
            </p>
          </div>

          {/* Expertise */}
          <div className="space-y-4">
            <h4 className="font-semibold text-white">Expertise</h4>
            <ul className="space-y-2 text-sm text-neutral-400">
              <li>Cultures Nordiques</li>
              <li>Développement Commercial</li>
              <li>Communication Globale</li>
              <li>Analyse Opportunités</li>
              <li>Conseil Stratégique</li>
            </ul>
          </div>

          {/* Services */}
          <div className="space-y-4">
            <h4 className="font-semibold text-white">Services</h4>
            <ul className="space-y-2 text-sm text-neutral-400">
              <li>Audit de Marché International</li>
              <li>Stratégie d'Expansion Nordique</li>
              <li>Communication Globale</li>
              <li>Formation Équipes</li>
              <li>Consultation Stratégique</li>
            </ul>
          </div>

          {/* Contact */}
          <div className="space-y-4">
            <h4 className="font-semibold text-white">Contact</h4>
            <div className="space-y-3 text-sm text-neutral-400">
              <div className="flex items-center gap-2">
                <Mail className="w-4 h-4" />
                <span>thierry@thierry-robert.eu</span>
              </div>
              <div className="flex items-center gap-2">
                <Linkedin className="w-4 h-4" />
                <span>Thierry Robert</span>
              </div>
              <div className="flex items-center gap-2">
                <MapPin className="w-4 h-4" />
                <span>Europe / Nordique</span>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom */}
        <div className="border-t border-neutral-700 mt-12 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-neutral-400">
            <p>
              © {currentYear} Thierry Robert. Tous droits réservés.
            </p>
            <div className="flex gap-6">
              <a href="#privacy" className="hover:text-white transition-colors">
                Politique de confidentialité
              </a>
              <a href="#terms" className="hover:text-white transition-colors">
                Mentions légales
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;